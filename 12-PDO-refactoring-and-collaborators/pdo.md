Summary:

1. index.php defers to a bootstrap file '$query = require 'bootstrap.php' which builds up a querybuilder to interact with our db

2. The querybuilder is responsible for building up sql queries in this case only one method to select everything from table

3. For the querybuilder to do its job it depends upon a PDO instance which is delegated to the connection class 

4. In our bootstrap file we are hooking up the connection and injecting it into the constructor of the querybuilder

<script>
require 'database/Connection.php';

require 'database/Querybuilder.php';

return new QueryBuilder(
    
    Connection::make()

);
</script>



We use the static keyword when we don't want to create an instance of a class

<script>

class Connection

{
    public static function make()
    
    {

    }
}

Instead of:

$connection = new Connection();
$connection->make();

We can simply use:

Connection::make();

</script>

When designing classes consider the following analogy: When we hire a contractor to build our house, the contractor wouldn't necessarily do all the work. Instead, he would delegate some of the work to the electrician, the plumber and the designer. 

<script>

class Contractor 

{
    protected $electrician;

    protected $plumber;

    public function __construct($electrician, $plumber, $designer)

    {
        $this->electrician = $electrician

        $this->plumber = $plumber
    }

    public function performWork() 

    {
        //$electrician
        //$plumber
        //$designer
    }
}

</script>