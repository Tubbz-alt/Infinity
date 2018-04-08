# Infinity
The Infinity App use a new approach in Speed-reading technique, using acceleration.

It is based in Figures and Shapes of http://www.speed-memory.com/ (or FastMemory) Technique. Using different velocities the mind can use different strategies to absorb information to Working Memory across the word velocity acceleration, for example:

start
low speed: Association (two words image) - words (1 to 6)
middle speed: iconic (one word image) (words 7 and 8)
high speed: phonological loop (sound of words, subvocalization) (words 9 to 13)
max speed: eidetic (only see the word like a photography) (words 14 and 15)
go to low speed

Now The App Support tricky stimulus in random mode or large words (length>=8)

You can have a improvement in your Working Memory with a word repetition of last or future words (-+1/2). This is a new approach in speed-reading for large words

Studies supporting this technique:

https://www.ncbi.nlm.nih.gov/pubmed/23982078
https://www.ncbi.nlm.nih.gov/pubmed/21787103

Test the App Online: http://competicionmental.appspot.com/router?page=infinity&en=1

Installation

To install Infinity App you need to put the files in this Github repository in a folder on a PHP server (you can use XAMP,WAMP, MAMP). The App not uses databases or other add-on. You can test it by open the file "inifinity.php" in the broweser.

Here the code of velocities definition (first main difference of this App with others of the same kind):

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
    
Here the code of Working Memory Tricky Stimulus (second main difference of this App with others of the same kind):

  //tricky experiment :)
  if(_.random(1,100)<=n("tricky") && posicion-2>=0 && nexTricky==0 || ( word_length>=8 && posicion-2>=0 && nexTricky==0 ) ){
    nexTricky=0;
    //if(word_length>=8)
    if(_.random(0,1)){ maxTricky=2; posicion-=wordsByFlash; }else{ maxTricky=3; posicion-=wordsByFlash*2; }
  }else{

    posicion+=wordsByFlash;
  }

  if(nexTricky==maxTricky){ nexTricky=0; }else{ nexTricky++; }
    
    
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

Licence: 

https://creativecommons.org/licenses/by-sa/4.0/legalcode
Attribution-ShareAlike 4.0 International (CC BY-SA 4.0)

![alt text](https://3.bp.blogspot.com/-Tbb-pTnBKcE/WsmSeikWblI/AAAAAAAABUY/x2VA_wv0vtg8BQoJWsUaVqugfZVLSIjAACLcBGAs/s1600/Captura%2Bde%2Bpantalla%2B2018-04-08%2Ba%2Blas%2B0.44.38.png)
