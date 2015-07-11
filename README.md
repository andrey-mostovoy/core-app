# Core APP

## Prepare

1. Replace `{{ core_app_name }}` to your real app name
2. Build docker image, for example:

`docker build -t app_name-dev dockerfiles/`

3. Initialize dev: `./bin/init/dev`
4. Restart nginx: `sudo sv restart nginx`

TODO: prod prepare and deploy
