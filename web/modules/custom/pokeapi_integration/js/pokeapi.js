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
                    type_name: item.type_name
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
  
            // Display the selected Pokémon name and type in console
            console.log('Selected Pokémon:', pokemonName);
            console.log('Type:', pokemonType);
            console.log('TypeName:', pokemonTypeName);
  
            // Set the input field value to the Pokémon name
            $('input[name="field_pokemon_name[0][value]"]').val(pokemonName);
            $('input[name="field_pokemon_type[0][target_id]"]').val(`${pokemonTypeName} (${pokemonType})`);
  

            function capitalize(s)
            {
             return s[0].toUpperCase() + s.slice(1);
            }
            
          }
        });
      }
    };
  })(jQuery, Drupal);
