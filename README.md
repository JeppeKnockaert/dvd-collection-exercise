This application was made to manage the sale of my collection of Movies.

Already done:
- Created a blade view with the table to display the movies and the columns I want (resources/views/dvd-collection.blade.php)
- Created a dummy DvdController that simply displays the view (app/Http/Controllers/DvdController.php)
- Create a route in web.php to link the controller to the root domain

Todo:

- Add some dummy data in the database to test with
- Make the controller prepare and send the data to the frontend
- Add testing for the controller to check if the data is prepared and sent correctly

To start the application:

```
./vendor/bin/sail up
```

and surf to http://localhost.
