# SmartNoteServer
## Coding style
Following one coding style can ease the way we develop and debug code; therefore, this section will include the coding style you should be following.
1. File Header
   1. File Name (Enter the name of the file/class).
   2. Your Name (The name of the person created the file and responsible on coding it).
   3. Date Created (The date you created the file/class and this date should not be changed at all).
   4. Description of the file (Include a paragraph describing the purpose of this file/class).

### Example
For example I will create a class called Login.

```
/*
						  Login.php
						Muhand Jumah
						 04/10/2017
 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
 standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
 a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
 remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing
 Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions
 of Lorem Ipsum.
*/

## Environment Setup
In order for you to develop the SmartNoteServer you need to have the appropriate environment, in this section we will talk about setting up your environment.
1. Web Server
   The first thing you need is some kind of webserver to receive any POST requests and process them using PHP files.
   Visit this link to download XAMPP https://www.apachefriends.org/index.html and download the appropriate version.
2. Clone this repository
   After downloading and installing the XAMPP server, you need to clone this repository. A good practice is you have a github folder on your local machine with all of your github projects. With that being said got ahead and clone this repository to your github folder by following this command
   /* git clone https://github.com/mTechOfficial/SmartNoteServer.git */
3. Checkout Development
   Now you need to checkout the development branch, master and development are 2 different branches and you need to work on the development branch
   To do so, type the following command /* git checkout Development */
4. Start your XAMPP server
   After cloning the repository and installing the server is time to launch it and confirm it works, start XAMPP then press "start" for Apache and MySQL modules, then go to your favorite web browser and type "localhost" then you should be prompted with XAMPP dashboard, now navigate to localhost/phpmyadmin and confirm you get the phpMyAdmin webpage, this will confirm your MySQL server is running as well.
5. Create symlink (soft link)
   Even though  our server is setup and working, we also have the github project on our github folder; We are still missing something, if you navigate to localhost/SmartNoteServer then you would be prompted with "Error 404" which means that folder is not found. So we need to have our cloned project on the server so it can find it, but the problem is that our project is in the github folder and we said for best practice we will leave it there so what should we do now so we can view our project on the server? Well here we introuce the concept of symlink or also known as soft link, this is a very simple concept, it says that a symlink is a shortcut that points to a specific file/directory in a different location on the machine.
   To create a symlink on windows, run Command Prompt (CMD) as administrator, then navigate to your XAMPP folder and then to the htdocs folder.
   To do so follow these steps, assuming my SmartNoteServer is on my D drive under the directory github
   /*
   cd..
   cd..
   cd XAMPP/htdocs
   mklink /D SmartNoteServer D:\github\SmartNoteServer
   */
   The first line of code is to go up 1 directory and the 2nd line is to go up 1 more, because my CMD's default directory is C:\Users\User> and my XAMPP is in the root of the C directory so I go up 2 directories, then in the 3r line I CD into XAMPP/htdoct and finally in the 4th line of code I create my link.
6. Now visit localhost/SmartNoteServer and you should be prompted with a page saying "It works"
