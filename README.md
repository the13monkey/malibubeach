# Malibu Beach Oceanfront Property for Sale Website
### This is a website to sell an oceanfront house and its adjacent empty lot in Malibu Beach, California. This website is built on Laravel PHP framework with a custom user authentication system. 
### Client's requirements of the authentication system of this website/web application 
- Everyone needs an access code to view contents of the site
- Registered user only gets an access code upon mannual approval from the client 
- The site will be seperated to two parts, the lot and the house
### Solutions to client's requirements
- Create a role in the user table to differenciate approved and newly registered users 
- Create a middleware called CheckApproval to protect all routes from non-approved users, leading everyone to a pending page
- User laravel to randomly generated password then use JavaScript to autofill the check password field
- Create a hidden "raw password" field to store the randomly generated code since the actual password will be hashed through Laravel

### Features of this website is as below: 
- Frontend
  - Responsive full-screen HTML video background, autoply on both desktop and mobile devices
  - Bootstrap 
- Backend
  - Laravel PHP & MySQL
### Languages/techologies used in this project include: 
- PHP, Bootstrap4, Laravel, jQuery, MySQL