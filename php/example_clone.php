
<!DOCTYPE html>

<h1 id="pepe" style="color:blue;">A Blue Heading</h1>
<style>/*holi1*/
body {background-color: powderblue;}/*holi2*/
h1   {color: blue;}
p    {color: red;}
</style>
 <script type="text/javascript">
            function alerta() 
			{
                alert('hola mundo!');
            }
			//coment inside javascript
        </script>
		 <script type="text/javascript">
            function alertar() 
			{
                alert('hola mundo!');
            }
			//coment inside javascript
        </script>
<!-- This is a comment -->
<html lang="en">
  <head>
  <!-- This is a comment -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cards</title>
    <link rel="stylesheet" href="card.css" />
  </head>
  <body>
 <section class="card-list">
      <article class="card">
        <header class="card-header">
          <p>Sep 11th 2020</p>
          <h2>Never forget</h2>
        </header>

        <!-- <div class="card-author">
          <a class="author-avatar" href="#">
            <img src="avatar.png" />
          </a>
          <svg class="half-circle" viewBox="0 0 106 57">
            <path d="M102 4c0 27.1-21.9 49-49 49S4 31.1 4 4"></path>
          </svg>

          <div class="author-name">
            <div class="author-name-prefix">Author</div>
            Jeff Delaney
          </div>
        </div> -->
        <div class="tags">
          <a href="#">html</a>
          <a href="#">css</a>
          <a href="#">web-dev</a>
        </div>
      </article>


<?php
/**
* A PHP_CodeSniffer specific test suite for PHPUnit.
*
* @author    Greg Sherwood <gsherwood@squiz.net>
* @copyright 2006-2015 Squiz Pty Ltd (ABN 77 084 670 600)
* @license   https://github.com/squizlabs/PHP_CodeSniffer/blob/master/licence.txt BSD Licence
*/
namespace PHP_CodeSniffer\Tests;
use PHPUnit\Framework\TestSuite as PHPUnit_TestSuite;
use PHPUnit\Framework\TestResult;

use PhpOffice\PhpWord\Exception\Exception;
use PhpOffice\PhpWord\Reader\ReaderInterface;
use PhpOffice\PhpWord\Writer\WriterInterface;
use PhpOffice\PhpWord\Element\Section;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\Shared\Html as HTMLParser;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\Shared\XMLReader;
use PhpOffice\PhpWord\Shared\ZipArchive;

class TestSuite1 extends PHPUnit_TestSuite
{
	/**
	* Runs the tests and collects their result in a TestResult.
	*
	* @param \PHPUnit\Framework\TestResult $result A test result.
	*
	* @return \PHPUnit\Framework\TestResult
	*/
	public function run(TestResult $result=null):TestResult
	{
		#comentario estilo bash
		
		//ejemplo de asignacion de variables
		# $var1 = 34;       //var1 tiene 34
		# $var2 = &var1; //var2 tiene 34 
		# $va1 = 27         //Las 2 variables cambian a 27.
		# $mivar = '3'               // mivar es de tipo string
		# $mivar = 2 +  $mivar  //resultado es 5.
		// $mivar2 = 5;
		// $mivar3 = (string)123; // Estoy forzando a que sea un string
		// $mivar3 = (int)123; // Estoy forzando a que sea un int
		// $mivar3 = (integer)123; // Estoy forzando a que sea un integer
		// $mivar3 = (object)123; // Estoy forzando a que sea un object

		$result = parent::run($result);
		printPHPCodeSnifferTestOutput();
		return $result;
	}//end run()
	
	/*public function test(string $hola)
	{
		$var1 = 34;  
		$a = 23;
		$b = 'a';
		echo $$b; //mostrará 123
		echo $b; // mostrará a		
		
	}
	
	public function test2()
	{
			test("hola");		
	}*/
	
}//end class

class TestSuite2 implements PHPUnit_TestSuite, AnotherTest
{
	/**
	* Runs the tests and collects their result in a TestResult.
	*
	* @param \PHPUnit\Framework\TestResult $result A test result.
	*
	* @return \PHPUnit\Framework\TestResult
	*/
	public function run(TestResult $result=null):TestResult
	{
		$result = parent::run($result);
		printPHPCodeSnifferTestOutput();
		return $result;
	}//end run()
}//end class

class Verdura {

   var $comestible;
   var $color;

   function __construct($comestible, $color="verde")
   {
       $this->comestible = $comestible;
       $this->color = $color;
   }

   function es_comestible()
   {
       return $this->comestible;
   }

   function qué_color()
   {
       return $this->color;
   }

}

class Calculator {

   var $scientific;
   var $operators;
   var $solar;

}

?>

      <article class="card">
        <header class="card-header">
          <p>Sep 11th 2020</p>
          <h2>Card Tricks are fun!</h2>
        </header>

        <div class="card-author">
          <a class="author-avatar" href="#">
            <img src="https://api.adorable.io/avatars/172/a.png" />
          </a>
          <svg class="half-circle" viewBox="0 0 106 57">
            <path d="M102 4c0 27.1-21.9 49-49 49S4 31.1 4 4"></path>
          </svg>

          <div class="author-name">
            <div class="author-name-prefix">Pirate</div>
            Zheng Zhilong
          </div>
        </div>
        <div class="tags">
          <a href="#">html</a>
          <a href="#">css</a>
        </div>
      </article>

      <article class="card">
        <header class="card-header">
          <p>Sep 11th 2020</p>
          <h2>Card Tricks are fun!</h2>
        </header>

        <div class="card-author">
          <a class="author-avatar" href="#">
            <img src="https://api.adorable.io/avatars/172/b.png" />
          </a>
          <svg class="half-circle" viewBox="0 0 106 57">
            <path d="M102 4c0 27.1-21.9 49-49 49S4 31.1 4 4"></path>
          </svg>

          <div class="author-name">
            <div class="author-name-prefix">Pirate</div>
            Francis Drake
          </div>
        </div>
        <div class="tags">
          <a href="#">html</a>
          <a href="#">css</a>
        </div>
      </article>
	  
	  
<?php
for($i=0;$i<10;$i++){
    echo 'Hola ' . $i;
}
?>


<?php
 $a= 5;
 $res= a%2;
 if($res==0)
  echo "$a es par";
 else if ($res==1)
  echo "$a es impar";
 else
  echo "$a es impar";
?>

<?php
$i=1;
while($i<=7){?>
 <br><font color='blue' size = '<?echo $i;?>' >
 Iteración # : <?php echo $i;
 $i++; ?>
 </font>
<?php } ?>


      <article class="card">
        <header class="card-header">
          <p>Sep 11th 2020</p>
          <h2>Card Tricks are fun!</h2>
        </header>

        <div class="card-author">
          <a class="author-avatar" href="#">
            <img src="https://api.adorable.io/avatars/172/c.png" />
          </a>
          <svg class="half-circle" viewBox="0 0 106 57">
            <path d="M102 4c0 27.1-21.9 49-49 49S4 31.1 4 4"></path>
          </svg>

          <div class="author-name">
            <div class="author-name-prefix">Pirate</div>
            Edward Teach
          </div>
        </div>
        <div class="tags">
          <a href="#">html</a>
          <a href="#">css</a>
        </div>
      </article>


      <article class="card">
        <header class="card-header">
          <p>Sep 11th 2020</p>
          <h2>Card Tricks are fun!</h2>
        </header>

        <div class="card-author">
          <a class="author-avatar" href="#">
            <img src="https://api.adorable.io/avatars/172/d.png" />
          </a>
          <svg class="half-circle" viewBox="0 0 106 57">
            <path d="M102 4c0 27.1-21.9 49-49 49S4 31.1 4 4"></path>
          </svg>

          <div class="author-name">
            <div class="author-name-prefix">Pirate</div>
            William Kidd
          </div>
        </div>
        <div class="tags">
          <a href="#">html</a>
          <a href="#">css</a>
        </div>
      </article>

      <article class="card">
        <header class="card-header">
          <p>Sep 11th 2020</p>
          <h2>Card Tricks are fun!</h2>
        </header>

        <div class="card-author">
          <a class="author-avatar" href="#">
            <img src="https://api.adorable.io/avatars/172/d.png" />
          </a>
          <svg class="half-circle" viewBox="0 0 106 57">
            <path d="M102 4c0 27.1-21.9 49-49 49S4 31.1 4 4"></path>
          </svg>

          <div class="author-name">
            <div class="author-name-prefix">Pirate</div>
            William Kidd
          </div>
        </div>
        <div class="tags">
          <a href="#">html</a>
          <a href="#">css</a>
        </div>
      </article>

      <article class="card">
        <header class="card-header">
          <p>Sep 11th 2020</p>
          <h2>Card Tricks are fun!</h2>
        </header>

        <div class="card-author">
          <a class="author-avatar" href="#">
            <img src="https://api.adorable.io/avatars/172/d.png" />
          </a>
          <svg class="half-circle" viewBox="0 0 106 57">
            <path d="M102 4c0 27.1-21.9 49-49 49S4 31.1 4 4"></path>
          </svg>

          <div class="author-name">
            <div class="author-name-prefix">Pirate</div>
            William Kidd
          </div>
        </div>
        <div class="tags">
          <a href="#">html</a>
          <a href="#">css</a>
        </div>
      </article>

      <article class="card">
        <header class="card-footer">
          <p>Sep 15th 2020</p>
          <h2>Card Tricks are not fun!</h2>
        </header>

        <div class="card-author">
          <a class="author-avatar" href="#">
            <img src="https://api.adorable.io/avatars/174/d.png" />
          </a>
          <svg class="half-circle" viewBox="0 0 106 57">
            <path d="M102 4c0 27.1-21.9 49-49 49S4 31.1 4 4"></path>
          </svg>

          <div class="author-name">
            <div class="author-name-prefix">Heroe</div>
            Superman
          </div>
        </div>
        <div class="tags">
          <a href="#">html</a>
          <a href="#">css</a>
        </div>
      </article>

 </section>
  </body>
</html>


<?php
for($i=0;$i<10;$i++){
    echo 'Hola ' . $i;
}
?>
