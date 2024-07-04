## Introduction
![image](https://github.com/JiGzSaw01/luigimon/assets/62275751/71e01cbe-7257-4c4c-8cef-096a90fa83b7)

Welcome to Luigimon!

This web application allows you to log your Pokémon captures and share your adventures with other trainers!

## Features
- User Registration: Sign up with your unique username then provide your "friendcode".
- Capture Entries: Add an entry for each Pokémon you catch. Include the following details:
  - Pokémon Name
  - Capture Location (Pokestop)
  - Capture Date
  - Pokémon Type (Earth, Air, Water, Fairy, Dragon, etc.)
  - Optional Photo
- Shareable URL: Every user receives a unique URL to display their Pokémon Diary. Feel free to share it with friends and fellow trainers!
  
## Screenshots
### Login
<img src="https://github.com/JiGzSaw01/luigimon/assets/62275751/49701ce3-8914-4cd6-81f8-bc78f6053cfd" width="50%" height="50%"/>

### Pokémon Diary
<img src="https://github.com/JiGzSaw01/luigimon/assets/62275751/786b7d3a-dd84-4c14-81b4-6befe211eb3b" width="50%" height="50%"/>

## Installation 

- Install DDEV by running the following commands:
  - `sudo apt-get update && sudo apt-get install -y curl`

  - `sudo install -m 0755 -d /etc/apt/keyrings`

  - `curl -fsSL https://pkg.ddev.com/apt/gpg.key | gpg --dearmor | sudo tee /etc/apt/keyrings/ddev.gpg > /dev/null`

  - `echo "deb [signed-by[=/etc/apt/keyrings/ddev.gpg] https://pkg.ddev.com/apt/ * *" | sudo tee /etc/apt/sources.list.d/ddev.list >/dev/null`

  - `sudo apt-get update && sudo apt-get install -y ddev`

- If you can run `ddev debug dockercheck` and there are no errors, then you're ready to install Drupal.
- Next, start the DDEV container. Run command `ddev start`.
- Then, install composer by running `ddev composer install`.
- Finally, launch your Drupal site with `ddev launch`.

## Importing Configuration
- After the successful Drupal setup, update Drupal's configuration and match the contents of the config directory. Run `ddev drush cim -y`.

## Importing Database
- Run `ddev exec --service db mysql db < db.sql` to import database.
