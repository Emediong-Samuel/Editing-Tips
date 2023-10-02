# A Technical Writing ediitng Checklist

![GitHub license](https://img.shields.io/badge/license-MIT-blue.svg)

## Description

This repository contains a PHP web application that displays an editing checklist for technical writing. The checklist includes essential tips and guidelines for technical writers to enhance the quality of their writing.
Users can click through the checklist to access each tip along with an explanation.

## Installation

To run this PHP web application locally, follow these steps:

1. Clone the repository to your local machine:

   ```bash
   git clone https://github.com/your-username/myphpapp.git

2. Navigate to the project directory:
   ```
   cd myphpapp
   
3. Start a local web server. You can use tools like XAMPP, WAMP, or PHP's built-in server.
4. Access the application in your web browser at http://localhost/myphpapp/index.php. (replcae "localhost" with your server's Ip address if you're using a remote server)

wget "https://sourceforge.net/projects/xampp/files/XAMPP%20Linux/8.2.4/xampp-linux-x64-8.2.4-0-installer.run"
**Make the Installer Executable** (if needed):
chmod +x xampp-linux-x64-8.2.4-0-installer.run
Replace the filename with the actual name of the downloaded installer.
**Run the Installer:**
sudo ./xampp-linux-x64-8.2.4-0-installer.run
**Follow the on-screen instructions to complete the installation**. 
You can typically choose the default settings unless you have specific requirements.
**Start XAMPP:**
```bash
sudo /opt/lampp/lampp start
This command will start the XAMPP services, including Apache (web server) and MySQL (database server).

**Move the "myphpapp" directory to the correct location within /opt/lampp/htdocs/:**
sudo mv myphpapp /opt/lampp/htdocs/
cd /opt/lampp/

**restart Apache**
sudo ./xampp reloadapache

The web application can now be accessible using the following URL:
http://localhost or IP address/myphpapp/index.php


## Usage
Navigate through the checklist by clicking the "Next Tip" button to reveal the associated editing tips and explanations.
Explore the valuable technical writing guidelines to improve your writing skills.

## License
This project is licensed under the MIT License - see the LICENSE file for details.

## Contributing
Contributions are welcome! If you'd like to contribute to this project, please follow these guidelines:

Fork the repository.
Create a new branch for your feature or bug fix.
Make your changes and commit them with descriptive messages.
Push your branch to your fork.
Submit a pull request to the main repository.
