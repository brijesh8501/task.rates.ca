
Firstly, I would like to say sorry because I tried to go beyond in doing task for designing/backend and also, checked Rates.ca website and replicate some design items into this task.

The following steps to follow in order to run this task:

1. Copy & paste the source code into "htdocs/task.rates.ca/"
2. MySQL DB import 
    - Create DB with name "ratesca_task"
    - import the db "ratesca_task.sql" copy that is present into source code. 


Below are the URLs

Home - http://localhost/task.rates.ca/
Quote List - http://localhost/task.rates.ca/quote/list/
New Quote - http://localhost/task.rates.ca/quote/create/
Thank You - http://localhost/task.rates.ca/success/thank-you/

Notes:

1. I have divided the usage of Vanialla JavaScript and jQuery into this task.
(I have read the job description properly in which it is mentioned to use JavaScript with/without jQuery so I used both)
- Designing with Vanilla JavaScript usage
- Backend with jQuery usage

2. DB is totally flexible since objects / array with objects are directly stored into DB. There is no need to make changes into DB structure while making changes of adding / removing input fields from form.

3. MVC structure code flow works as:

Webpage -> JS file -> AJAX request pass to request.php file -> controller.php file -> backend.php file


Additional items that can also be done in Quote feature enhancement:

1. Add pagination / search functionality to Quote List page
2. Multiple Drivers implementation - In DB, either use the same column "primary_driver_details" and rename to generic term "driver_details" or create one column "secondary drivers". If we are using the existing same column then create a new object key that differentiate primary and secondary drivers info and then store data into DB.
3. Better UI for "Add Vehicle" as like Rates.ca.






