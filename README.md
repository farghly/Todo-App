## ToDo App
*Laravel version:9.14*

# About the application

The idea of the application is make a list of tasks, you want to complete or things that you want to do

<br />

<!-- ## Screenshots from application -->
<!-- 
### **Register screen**
<img src="https://github.com/farghly/Todo-App/blob/master/public/img/appScreenshots/Register-Screen.PNG" width="512"/>

### **SignIn screen**
<img src="https://github.com/farghly/Todo-App/tree/master/public/img/appScreenshots/singIn-screen.PNG" width="512"/>

### **Add task screen**
<img src="https://github.com/farghly/Todo-App/tree/master/public/img/appScreenshots/add-task.PNG" width="512"/>

### **Task list screen**
<img src="https://github.com/farghly/Todo-App/tree/master/public/img/appScreenshots/task-lists.PNG" width="512"/>
-->
<br />

To use this application first clone it 
```bash
git clone https://github.com/farghly/Todo-App.git
```
**After cloning it istall packages**
```bash
composer install
```
**copy env from env.example**
```bash
copy .env.example .env
```

**And config your env file with database**

**Don't forget to generate key**
```bash
php artisan generate:key
```
<br/>

## **Migrate database**
```bash
php artisan migrate
```

**And launch the application**
```code
php artisan serve
```