### A project by Timothy Bridge
This is projected aimed at solidifying my knowledge in implementing Laravel, Vue.js
and Inertia together.
Currently - the page just converts the local time to hex and shows it increasing in
real time.
But this is a placeholder and I will be expanding upon this project in the coming days.

### To run this project
After `git clone` you need to do the following
    
* `npm install`
* `npm run dev`
* `php artisan serve`

This will run both the Vite server and the Laravel server. If you then visit

`http://localhost:8000`

In terms of testing, I have currently implemented Husky and Snyk to scan for any vulnerabilities on commit.
This includes scanning for exposed secrets, etc. But will of course expand the testing suite.

### Plans

* Implement a couple of pages with routing between each.
* Consistent styling and use of layouts to keep nav and footer consistent even when moving between pages.
* Implement testing to follow best practice.

These are by no means an exhaustive list, I am really enjoying getting to grips with
all things Laravel and Vue.
