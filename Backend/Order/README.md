# Order Service
Service available in https://order-service-fp.herokuapp.com/
### Continuous Integration
Github action workflow for larave;

## APIs
### Customer
- <a href = "https://order-service-fp.herokuapp.com/api/orders">List out history orders made by user</a> [request user_id]
- <a href = "https://order-service-fp.herokuapp.com/api/order/id">Get the list of product ordered by an individual order</a> [request user_id]
    
### Admin
- <a href="https://order-service-fp.herokuapp.com/api/admin/orders/all">List out all the ordered cart</a>
    
### List of status
- 1- Not ordered -> user not yet check out the order
- 2- Ordered -> user checked out their order
- 3- Pending -> when admin are sorting out their order
- 4- Delivered -> when admin already delivered their order
