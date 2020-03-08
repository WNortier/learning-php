<?php

require 'database/Connection.php';

require 'database/Querybuilder.php';

return new QueryBuilder(
    
    Connection::make()

);
