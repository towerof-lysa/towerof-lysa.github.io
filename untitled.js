var main = function() {

 $("#post1").load("../post1.txt #preview");
 $("#post2").load("../post2.txt #preview");
 $("#post1-text").load("../post1.txt");
 $("#post2-text").load("../post2.txt");


}//main
$(document).ready(main);