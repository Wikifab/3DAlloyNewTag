<?php
namespace ThreeDAlloyNewTag ;
class ThreeDAlloyNewTagParser {
    // Register any render callbacks with the parser
    public static function onParserSetup( &$parser ) {
        var_dump('hello');
        // Create a function hook associating the "example" magic word with renderExample()
        $parser->setFunctionHook( 'threeDAlloyNewTag', 'ThreeDAlloyNewTag\\ThreeDAlloyNewTagParser::renderThreeDAlloyNewTag' );
    }

    public static function onLinkerMakeMediaLinkFile( $title, $file, &$html, &$attribs, &$ret ) {
        var_dump($title);
        return false;
    }


}

?>

