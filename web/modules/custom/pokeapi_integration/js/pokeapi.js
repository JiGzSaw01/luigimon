(function ($, Drupal) {
  Drupal.behaviors.pokemonAutocomplete = {
    attach: function (context, settings) {
      $('input[name="field_pokemon_name[0][value]"]', context).autocomplete({
        source: function (request, response) {
         
          $.ajax({
            url: Drupal.url('pokeapi/autocomplete'),
            data: { q: request.term },
            success: function (data) {
              response(data.map(function (item) {
                return {
                  label: item.label,
                  value: item.value,
                  type: item.type_ID,
                  type_name: item.type_name,
                  img: item.img,
                  type_string: item.type_string
                };
              }));
            }
          });
        },
        minLength: 2,
        select: function (event, ui) {
          console.log(ui);
          var valueParts = ui.item.value;
          var pokemonName = capitalize(valueParts);
          var pokemonType = ui.item.type;
          var pokemonTypeName = capitalize(ui.item.type_name);
          var pokemonImage = ui.item.img;
          var pokemonTypeString = ui.item.type_string;

          // Set the input field value to the Pokémon name and type
          $('input[name="field_pokemon_name[0][value]"]').val(pokemonName);
          $('input[name="field_pokemon_type[0][target_id]"]').val(`${pokemonTypeName} (${pokemonType})`);
          $('input[name="field_pokemon_type[target_id]"]').val(pokemonTypeString);


          // Check if the image preview div already exists
          var existingPreviewDiv = document.querySelector('.image-preview');

          // If it exists, remove its contents
          if (existingPreviewDiv) {
            existingPreviewDiv.innerHTML = ''; // Clear existing content
          } else {
            // Otherwise, create a new div for the image preview
            existingPreviewDiv = document.createElement('div');
            existingPreviewDiv.classList.add('image-preview'); // Add a class to style if needed
          }

          // Create a label element for "Image Preview"
          var labelElement = document.createElement('label');
          labelElement.textContent = 'Image Preview';
          labelElement.style.fontWeight = 'bold';
          labelElement.style.display = 'block';
          labelElement.style.marginBottom = '11px';

          // Append label element to image preview div
          existingPreviewDiv.appendChild(labelElement);

          // Create a new image element
          var img = document.createElement('img');

          // Set the source attribute of the image
          img.src = pokemonImage; // Replace with your image path or data

          // Optionally, set other attributes like alt text, width, height, etc.
          img.alt = pokemonName;
          img.width = 100; // width of image
          img.height = 100; // height of image

          // Append the image element to the image preview div
          existingPreviewDiv.appendChild(img);

          // Find the existing div where you want to append or replace the image preview
          var targetDiv = document.querySelector('.details-wrapper'); // Replace with your existing div class or ID

          // If the target div exists, append or replace the image preview content
          if (targetDiv) {
            // If the image preview div already existed, it has been updated; if not, it has been created
            targetDiv.appendChild(existingPreviewDiv);
          } else {
            console.error('Target div not found.');
          }

          // Save the image when a Pokémon is selected
          $.ajax({
            url: Drupal.url('pokeapi/save-image'),
            method: 'POST',
            contentType: 'application/json',
            data: JSON.stringify({
              image_url: pokemonImage,
              pokemon_name: pokemonName,
            }),

            success: function (data) {
              if (data.status === 'success') {
                console.log('Image saved with file ID: ' + data.file_id);
                $('input[name="field_pokemon_image[0][fids]').val(data.file_id);
              } else {
                console.error('Error saving image: ' + data.message);
              }
            },
            error: function (jqXHR, textStatus, errorThrown) {
              console.error('AJAX error: ' + textStatus + ': ' + errorThrown);
            }
          });

          function capitalize(s) {
            return s[0].toUpperCase() + s.slice(1);
          }

        }
      });
    }
  };
})(jQuery, Drupal);
