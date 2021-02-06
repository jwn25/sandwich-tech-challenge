# Subway Sandwich (Technical challenge project)
**Developed By: Jeevan Dhakal**
It took around 11 hours (including yii framework study time) to complete this project. 

# Installation Processes

 

 1. Clone the whole project using ssh or https.  `git clone https://github.com/jwn25/sandwich-tech-challenge.git`

 3. Create database and update your database configuration on `common/config/main-local.php` file

        'db' => [
    		'class' => 'yii\db\Connection',
    		'dsn' => 'mysql:host=localhost;dbname=database_name',
    		'username' => 'root',
    		'password' => '',
    		'charset' => 'utf8',

 4. Run all the migrations. `php yii migrate`
 5. Setup virtual hosts for both backend and forntend folders (Optional)
 6. Project is ready to be checked on `localhost_url/project_folder/frontend` (FRONTEND) and `localhost_url/project_folder/backend` (Backend)
 

## Tools Used

 1. **Programming Language :** PHP
 2. **Framework** Yii2
 3. Tools: Gii (For CRUD Operations)
 4. Backend template: AdminLte3
 5. Design Framework : Boostrap 3  

## Screenshots

**Frontend**
<br>

![enter image description here](https://i.ibb.co/80W5KXY/Screenshot-from-2021-02-06-20-20-14.png)
<br>

Landing Page
<br>

![enter image description here](https://i.ibb.co/ZmDs0yL/Screenshot-from-2021-02-06-20-21-10.png)
<br>

User Auth

<br>

![enter image description here](https://i.ibb.co/vY23WZg/Screenshot-from-2021-02-06-20-28-02.png)
<br>

User Validation
<br>

![enter image description here](https://i.ibb.co/YtVHJjB/Screenshot-from-2021-02-06-20-23-50.png)
<br>

Order Form
<br>![enter image description here](https://i.ibb.co/KW4yD8H/Screenshot-from-2021-02-06-20-26-42.png)
<br>
Order Lists
<br>
<br>
<br>


**Backend**
![enter image descriptionddfsdfa here](https://i.ibb.co/KWvzf4K/Screenshot-from-2021-02-06-20-12-51.png)
 Login Page
<br>
<br>


![enter image description here](https://i.ibb.co/1M1V8S0/Screenshot-from-2021-02-06-20-14-45.png)
<br>

List of customers

<br> 

![enter image description here](https://i.ibb.co/99Dx0yL/Screenshot-from-2021-02-06-20-14-52.png)
<br>

Meals Listing

<br> ![enter image description here](https://i.ibb.co/0C4ymd9/Screenshot-from-2021-02-06-20-15-03.png)
<br>

Meal Opening Days
<br>

![enter image description here](https://i.ibb.co/K0s1zfd/Screenshot-from-2021-02-06-20-14-49.png)
<br>

Orders List

