<?hh

/* Prototype  : array gd_info  ( void  )
 * Description: Retrieve information about the currently installed GD library
 * Source code: ext/standard/image.c
 * Alias to functions:  */
<<__EntryPoint>> function main(): void {
echo "basic test of gd_info() function\n";

var_dump(gd_info());

echo "\nDone\n";
}
