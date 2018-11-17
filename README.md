### Challenge

Skoove Coding Challenge – Payment statistics service
Your job is to develop a simple payment statistics service. Goals:

- Use the PHP Laravel platform. You may use additional technologies, but overall
simplicity is desired.
- The service should be efficient and scale well, with regards to CPU, memory etc., in
the number of payment events per second (at least to a couple 100 payments/s)
- Use your usual software development practices, but it’s okay to not use a secure
(SSL) connection and you don’t need to implement fail-over or failure recovery.
- Deliver the solution in some easy to set-up VM environment (e.g. docker compose)
and provide the source for any binary images that you might provide
The service should be accessible via a REST API. It should have two endpoints:
```
1. POST http://<host>:<port>/payment
Request Body content type : application/json
Example Request Body :
{ "amount" : "15.50" }
Return Status Code : 201
```
This endpoint is expected to be called several hundreds of times per second.
```
2. GET http://<host>:<post>/statistics
Return content type : : application/json
Example Response Body:
{ "total_amount" : "1578.25", "avg_amount" : "14.78" }
```
This endpoint should return the total payment amount and the average payment amount,
as received on the first endpoint, during the last ***60 seconds***.

This endpoint will be called about every ***5 seconds*** to update a number on a dashboard where it can be read by team members. As a consequence, there is some tolerance about the precise start and end of the 60 second interval, it does not have to be precise to the millisecond. Also, when the service is restarted, it is considered okay if the statistics need a minute to “warm up”.

### Implementation

I created 2 controllers, one for each endpoint, using the basic DDD. I used the dependency injectation from Laravel. That's also a migration in the project to configure the database.

### How to test

1. Please clone the repo:
```
git clone git@github.com:wiltongarcia/skoove.git
```
2. And run inside the root folder of repo:
```
docker-compose up --build
```
3. After the backend container starts, you can make a request at the URLs:
```
http://localhost:8080/payment

http://localhost:8080/statistics
```

#### Thanks for your time!

