# ChatSphere

ChatSphere is a real-time online chat platform that enables users to register, log in, upload profile pictures, and have private conversations with other users. Built with Vanilla PHP, JavaScript, HTML, and CSS, it offers a simple yet interactive user experience.

## Features

- **User Authentication**: Secure user registration and login.
- **Profile Management**: Upload and manage profile pictures.
- **Real-Time Messaging**: Chat with other users instantly.
- **Responsive Design**: Optimized for mobile and desktop devices.

## Tech Stack

- **Frontend**: HTML, CSS, JavaScript
- **Backend**: PHP
- **Database**: MySQL


## ** Important Notes **-----------------------

- **Folder Permissions**: Ensure the images folder in your PHP directory has write permissions (chmod 777) to allow uploading profile pictures.

- **Database Name**: Use the database name **onlinechat_db** when creating the database.

- **Table Structures**: Follow the exact structure for the users and messages tables as defined above for proper functionality.

## users Table:

- user_id: INT, AUTO_INCREMENT, PRIMARY KEY

- unique_id: INT, NOT NULL

- fname: VARCHAR(255), NOT NULL

- lname: VARCHAR(255), NOT NULL

- email: VARCHAR(255), NOT NULL

- password: VARCHAR(255), NOT NULL

- img: VARCHAR(255)

- status: VARCHAR(255)

## messages Table:

- msg_id: INT, AUTO_INCREMENT, PRIMARY KEY

- incomeing_id: INT, NOT NULL

- outgoing_id: INT, NOT NULL

- message: VARCHAR(255), NOT NULL



