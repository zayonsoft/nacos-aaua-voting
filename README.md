# NACOS AAUA E-VOTING SOFTWARE

This is a software designed and developed by [Enoch Olayode](https://github.com/ENOCH1234)

The link to the original repo is at: [https://github.com/ENOCH1234/nacos-aaua-voting](https://github.com/ENOCH1234/nacos-aaua-voting)

The files were forked and updated for the 2026 NACOS AAUA Election by Tony-Akinlosotu Favour [(ZayonSoft)](https://zayonsoft.vercel.app) and they can be cloned at:
[https://github.com/zayonsoft/nacos-aaua-voting.git](https://github.com/zayonsoft/nacos-aaua-voting.git)

This system is designed to operate locally and supports seamless connectivity to additional nodes (computers/devices) , with one instance designated as the server

---

## Built With

- PHP

---

## Getting Started

Instructions to set up the project locally

### Prerequisites

- Install XAMPP
  You can follow the link: [https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/8.2.12/xampp-windows-x64-8.2.12-0-VS16-installer.exe/download](https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/8.2.12/xampp-windows-x64-8.2.12-0-VS16-installer.exe/download)

---

### Installation

1. Clone the repository the forked repo

```bash
git clone https://github.com/zayonsoft/nacos-aaua-voting.git
```

or the original repo

```bash
git clone https://github.com/ENOCH1234/nacos-aaua-voting.git
```

2. Move the folder (nacos-aaua-voting) into `C:\xampp\htdocs\` (if you didn't clone it into this directory)

- Note: The htdocx should be in the directory where xampp is installed

3. Open XAMPP Control Panel and start the Apache and Sql Server
   ![XAMPP Control Panel](readme_images/xampp_cp.png)

4. Setup the database

- Click on SQL Admin Button After running the server to open the admin panel on the browser

  ![Click SQL ADMIN](readme_images/sql_admin_pointer.png)

- On the Left Hand Side Click on New and Create a db named `votesystem`
  ![Creating Database](readme_images/creating_db.png)

- Click on the Import Tab and import the data from `db/votesystem.sql`
  - see [db/votesystem.sql](db/votesystem.sql)
    ![Importing Data](readme_images/importing_data.png)

---

## Web Interface for the Server Computer (On the device that is the server)

1. Go to your browser and type: `http://localhost/nacos-aaua-voting/` - Note: This will automatically take you to the Voter Login Page
   ![Voter Login Page](readme_images/voter_login.png)

2. To Access the Admin Login Page enter `http://localhost/nacos-aaua-voting/nacos_admin`
   ![Admin Login Page](readme_images/admin_login.png)
   The default admin username is: `nacos_aaua`
   Default Password is: `admin`
