# Infinity
The Infinity App use a new approach in Speed-reading technique, using acceleration.

It is based in Figures and Shapes of http://www.speed-memory.com/ (or FastMemory) Technique. Using different velocities the mind can use different strategies to absorb information to Working Memory across the word velocity acceleration, for example:

start
low speed: Association (two words image) - words (1 to 6)
middle speed: iconic (one word image) (words 7 and 8)
high speed: phonological loop (sound of words, subvocalization) (words 9 to 13)
max speed: eidetic (only see the word like a photography) (words 14 and 15)
go to low speed

Test the App Online: http://competicionmental.appspot.com/router?page=infinity&en=1

Installation

To install Infinity App you need to put the files in this Github repository in a folder on a PHP server (you can use XAMP,WAMP, MAMP). The App not uses databases or other add-on. You can test it by open the file "inifinity.php" in the broweser.

Here the code of velocities definition (main difference of this App with others of the same kind):

  _n=velocity; // The velocity is in words per minute (wpm)

    if(wordCount>=3) //word count is 0 to 15
      _n = _n + _n * 0.2;
    if(wordCount>=6 && wordCount<9)
      _n = _n + _n * 0.4;
    if(wordCount>=9 &&wordCount<12)
      _n = _n + _n * 0.6;
    if(wordCount>=12 &&wordCount<14)
      _n = _n  + _n * 0.8;

    velocity=_n;
    
    
Description of Shapes and Colors discipline in Fast-Memory or Speed-Memory competitions: http://www.insanity-mind.com/train-memory-championship-ii-figures-test/

Also the App have grafem-color synesthesia experimental features.

The App is compatible with tablets, mobile phones, and Desktop Pc

Technology
The App is programmed in PHP, Javascript and Html using the jQuery and underscore.js libraries

Roadmap
In te future the Software will be a Android and Iphone App, and will have compatibility with epub and txt files.
The web version will can load epub and txt books from dropbox.
How to contribute?
You can contact to my mail: robertchalean@gmail.com

App Online Link: http://competicionmental.appspot.com/router?page=infinity&en=1 
