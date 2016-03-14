RESTFUL API Skeleton
=======

This project was created for me at the beggining 'cause I love RESTFUL API. 
It's a simple test Api with a User.

The REST parts is managed by FOSRestBundle
The DB is managed by Doctrine.

Starting the project : 

`vagrant up`
`vagrant ssh` 
`cd /var/www/rest`
`composer install`
 
Generate database and loading fixtures :
 
`bin/console doctrine:database:create` 
`bin/console doctrine:schema:update` 
`bin/console doctrine:fixtures:load` 

Testing the API : 

`curl -i -X GET neoapi.prod/api/users`





Copyright © 2016 Jérôme Schaeffer <jsc@opcoding.eu>
This work is free. You can redistribute it and/or modify it under the
terms of the Do What The Fuck You Want To Public License, Version 2,
as published by Sam Hocevar. See the LICENSE file for more details.
