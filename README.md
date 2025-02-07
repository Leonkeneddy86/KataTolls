# 🛣️ Kata Tolls and Vehicles 🚗
In this project it is required to develop a program that models a toll system. In which data on both tolls and vehicles are stored, as well as the relationships between them.Designed with [Laravel](https://laravel.com) framework. 

## 👀 Views

*Tolls View*

<img width="959" alt="toll" src="https://github.com/user-attachments/assets/f4e6dc0d-595f-4e8b-bdbd-cf0a98d12f2f" />


*Vehicles View*

<img width="959" alt="vehicles" src="https://github.com/user-attachments/assets/df3d13bc-4bb5-4548-958a-0c6b7de63b3f" />


## 💻 Languages ​​and tools  
![](https://skillicons.dev/icons?i=html,css,php,laravel,git,github,vscode,)

## ⚙️ Installation prerequisites
🟢Install [Node.js](https://nodejs.org/en/download/source-code)

🟢Install [Composer](https://getcomposer.org/download/)

## 🛠️ Installation Guide 
0️⃣ Before starting to install the project, you will need to create a database (we have used mysql via xampp) and name it: `katatolls` 

1️⃣ Open a terminal in the folder where you want the repository to be cloned and enter this command:
```
git clone https://github.com/Leonkeneddy86/KataTolls.git
```
2️⃣ As you clone the repository, it will appear all the elements on it; you need to rename the file ".env.example" to ".env" and fill it with theese values:

<img width="200" alt="env" src="https://github.com/user-attachments/assets/6689a261-6c62-48c5-af17-cf7ce89af682" />


2️⃣ In your preferred environment, open the project you cloned; you will need three consoles for the next step.

▷Console 1:
    `npm install` `npm run dev`
    
▷Console 2:
    `composer install` `php artisan serve`
    
▷Console 3: 
    `php artisan migrate:fresh`
    `php artisan migrate:fresh --seed`
    
3️⃣ In the second console that you have opened, press the ctrl key and click on the link to localhost that it offers you. It should take you to the main view of the project where the offers are located.

⚠️ If you have done the previous steps and the view has not opened correctly, go back to the third command console and enter this:

`php artisan key:generate` `php artisan config:cache` 

## 🌐 Endpoints 
For this project, there are 2 endpoints for adding vehicles and tolls. And another one to make a vehicle pass through the toll. For the 2 first you'll need to introduce via postman this json schema to enter the data.

### 🏍️ Create Vehicle (POST)
`http://127.0.0.1:8000/api/vehicles`

```
{
	"vehicle_type_id" : (int),
	"registration" : "(string)"
}
```

### 🛣️ Create Toll (POST)
`http://127.0.0.1:8000/api/tolls`

```
{
	"name" : "(string)",
	"city"  : "(string)"
}
```

### 🚚 Pass Through Toll 🛣️ (PUT)
`http://127.0.0.1:8000/api/vehicles/id/tolls/id`

## 🧪 Tests 
All tests passed. Introduce this line on your console to check it:

`./vendor/bin/phpunit tests`



If you want to launch the tests and view them you can put this command in console 3:

`php artisan test --coverage` 

<img width="557" alt="test php" src="https://github.com/user-attachments/assets/95dba3ec-59c2-4197-ab94-65cb14f0d276" />


## 🛠️ Jira Backlog 

![screencapture-jonathan19jtv-atlassian-net-jira-software-projects-KAT-boards-2-2025-02-07-18_22_03](https://github.com/user-attachments/assets/cc024afc-da48-4476-8e36-7e18f51eb987)



## 🗂️ BBDD

<img width="745" alt="Captura de pantalla 2025-02-07 180511" src="https://github.com/user-attachments/assets/3f441773-422b-4b19-a335-59f3600ce8ac" />



