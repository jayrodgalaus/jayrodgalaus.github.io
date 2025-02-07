<?php require 'head.php'; ?>
    <title>Audit Trails | JG Web</title>
    
</head>
<body>    
    
    <nav id="mainnav" class="mainnav navbar navbar-expand-lg bg-dark fixed-top">
        <div class="mainnav container-fluid px-5">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                <i class="fa-solid fa-list-ul"></i>
            </button>
            <a class="mainnav navbar-brand" href="../homepage">
                <img class="mainnav " src="../assets/icons/logo.svg" alt="Bootstrap" width="30" height="24">
            </a>            
            <button class="mainnav navbar-toggler text-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <i class="fa-solid fa-bars"></i>
            </button>
            <div class="mainnav bg-dark offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="mainnav offcanvas-header"> 
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">JG Web</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="mainnav offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="../homepage">Home</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <aside class="">
        <div class="container-fluid">            
            <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">List of Contents</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body text-bg-dark">
                    <ul id="sidenav" class="sidenav navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#login-and-register">Login and Registration</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#what-is-login">What is Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#what-is-registration">What is Registration</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#user-accounts">User accounts</a>
                            <ul class="navbar-nav ms-3">
                                <li class="nav-item">
                                    <a class="nav-link" href="#user-types">User Types</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#roles">Roles</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#permissions">Permissions</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#uses">Uses Cases</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#no-user-accounts">No User Accounts</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </aside>
    <div id="article" class="vw-100" >
        <div class="container container-lg mt-5">
            <div class="content mt-5 pt-2">
                <div class="row">    
                    <div class="col-sm-1 col-lg-3 text-light" >
                        <div id="mainsidenav" class="sidenav list-group list-group-flush bg-none sticky-top pt-3 sm-d-none lg-d-block">
                            <a class="list-group-item list-group-item-action bg-none text-light" href="#login-and-register">Login and Registration</a>
                            <a class="list-group-item list-group-item-action bg-none text-light" href="#what-is-login">What is Login</a>
                            <a class="list-group-item list-group-item-action bg-none text-light" href="#what-is-registration">What is Registration</a>
                            <a class="list-group-item list-group-item-action bg-none text-light" href="#user-accounts">User accounts</a>
                            <div class="list-group list-group-flush bg-none ps-3">
                                <a class="list-group-item list-group-item-action bg-none text-light" href="#user-types">User Types</a>
                                <a class="list-group-item list-group-item-action bg-none text-light" href="#roles">Roles</a>
                                <a class="list-group-item list-group-item-action bg-none text-light" href="#permissions">Permissions</a>
                            </div>
                            <a class="list-group-item list-group-item-action bg-none text-light" href="#uses">Uses Cases</a>
                            <a class="list-group-item list-group-item-action bg-none text-light" href="#no-user-accounts">No User Accounts</a>
                        </div>
                    </div>
                    <div class="col-sm-10 col-lg-6 text-light">
                        <h1 id="login-and-register">Login and Register</h1>
                        <p class="lead">
                            Login and registration are important components of any web application, necessary for securing user data and preventing unauthorized access. The process of logging in and registering an account is generally simple, but the user experience can be improved by providing clear instructions and feedback throughout the process. Let's go over the basics of login and registration so you can decide whether your system needs them or not. 
                        </p>
                        <p class="text-muted">Last updated on March 31, 2024</p>
                        <div class="card text-dark">
                            <div class="card-body fs-6">If you already have an understanding of login and registration, you can <a  href="#uses">skip</a> this section and read on about their other uses and features</div>
                        </div>
                        <h2 id="what-is-login" class="mt-3">What is Login</h2>
                        <p>Login is the process of authenticating a user's identity to grant them access to your website or web application's content. A successful login allows the user to access their account and perform their desired tasks, while a failed login prevents unauthorized access. You may have already encountered different forms of logging in, such as <b>Username</b>, <b>Email</b>, and <b>Password</b> combinations, one-time passwords (OTP), or biometrics, to name a few.</p>
                        <figure>
                            <img src="../assets/img/login.png" alt="login image" class="w-100" >
                            <figcaption><i>Sample login interfaces. Photo from auth0.com</i></figcaption>
                        </figure>
                        <h2 id="what-is-registration" class="mt-3">What is Registration</h2>
                        <p><b>Registration</b> is the process of a user providing their personal information to create an account on your website or web application. During the registration process, users typically provide their name, email address, password, and sometimes additional information such as their date of birth or phone number. Registration is an important aspect of a website or web application as it allows users to create an <b>account</b>, save their information, and access their account in the future.</p>
                        <h2 id="user-accounts" class="mt-3">User Accounts</h2>
                        <p>A user account is the digital representation of the information, settings, and preferences of an individual user. The primary purpose of a user account is to provide a personalized experience for the user. Additionally, they are crucial for websites and applications that require user <b>authentication</b>.</p>
                        <h3 id="user-types">User Types</h3>
                        <p>Aside from user accounts granting users access to content, users can also be assigned a <b>type</b>. '<b>Admin</b>', '<b>Super Admin</b>' and '<b>Guest</b>' are some basic examples of user types, though what you call these types are up to you. You can even use the positions in your company such as '<b>Manager</b>', '<b>Supervisor</b>', 'Intern', etc. Users can be shown different content or given access to features and tools depending on their user type.</p>
                        <p>Let's take a a blog website for instance. A blog website typically has an <b>Admin</b>, <b>Editor</b>, and <b>Content Creator</b> as user types. The Admin user may be able to see and manage all the content that <b>Editor</b> and <b>Content Creator</b> user types publish in their blogs. They may also manage other users and assign <b>roles</b> and <b>privileges/permissions</b> to them<sup><a href="user-management" title="Read more on user management">[1]</a></sup>. Meanwhile, Editors can only manage their own content, and the content of the creators under their jurisdiction. Finally, a Content Creator may be able to write and edit their posts, but have to submit them to the editor for proofreading. They would not be able to access posts created by other content creators.</p>
                        <figure>
                            <img src="../assets/img/usertypes.png" alt="login image" class="w-100" >
                            <figcaption><i>Sample user types and corresponding permissions</i></figcaption>
                        </figure>
                        <h3 id="roles">Roles</h3>
                        <p>User roles are a way to categorize users and further specify which content, tools, and features are within their scope. This helps in the separation of responsibilities, especially when a user type can cover a broad area. This is also called <b>Role-based access control (RBAC)</b><sup><a href="https://www.digitalguardian.com/blog/what-role-based-access-control-rbac-examples-benefits-and-more" target="_blank" title="Read more on RBAC">[2]</a></sup></p>
                        <p>Going back to our blog website example, the blog posts may be categorized as 'News', 'Editorial', 'Sports', etc. By categorizing blog posts and assigning roles to editors based on the categories, we can limit their scope to only certain categories, preventing them from managing all the blog content. For example, an <b>Editor</b> assigned to the <b>'Sports Editor' role</b> will only be able to manage sports-related content, preventing them from seeing or editing other categories.</p>
                        <h3 id="permissions">Permissions</h3>
                        <p>Permissions determine what actions and resources a user can access, modify, create, or delete within an application. In web development, this is referred to as <b>Create, Read, Update, and Delete (CRUD)</b><sup><a href="crud" target="_blank" title="Read more on CRUD">[3]</a></sup>, the four major operations of data management.</p>
                        <p>In addition to controlling access, permissions can also be used to ensure that users are only able to perform actions within their scope of responsibility and to prevent unauthorized access to sensitive data or data belonging to other users.</p>
                        <h2 id="uses" class="mt-3">Use Cases</h2>
                        <p>In general, there are several use cases where an application might require authentication:
                            <ol>
                                <li><b>Security-sensitive applications:</b> Authenticated users can access secure data and resources, such as sensitive information or financial transactions.</li>
                                <li><b>Personalized experiences:</b> Authenticated users can receive personalized recommendations, targeted ads, or tailored content based on their past behavior and preferences.</li>
                                <li><b>Social-media apps:</b> Users need to authenticate themselves to create, edit, or delete profile information, engage with friends, or connect to other social media accounts.</li>
                                <li><b>E-commerce sites:</b> Authenticated users can place orders, access account information, and make payments.</li>
                                <li><b>Cloud storage applications:</b> Authenticated users can access, store, and share files, photos, videos, and other content.</li>
                                <li><b>Internet banking:</b> Authenticated users can access their bank accounts, view transaction histories, and make payments online.</li>
                            </ol>                            
                            There are many other use cases where authentication is required, depending on the specific application and its needs.                            
                        </p>
                        <h2 id="no-user-accounts">Building Applications without User Accounts</h2>
                        <p>There are a number of potential benefits and drawbacks associated with building applications that do not require users to create accounts. On the one hand, not requiring users to create accounts can help to reduce friction and create a more seamless user experience, leading to increased engagement and retention. This is because users can start using the application right away, without having to go through the hassle of creating an account. Additionally, not requiring accounts can also make the application more accessible, as some users may be unwilling or unable.</p>
                        <p>On the other hand, not requiring users to create accounts can also have disadvantages. One of the biggest disadvantages is that it can limit the ability of the application to collect user data, which can be valuable for personalization and marketing purposes. Additionally, not requiring accounts can also reduce the security of the application, since users are not required to authenticate themselves.</p>
                        <p>Ultimately, whether to require user accounts for an application will depend on the specific needs and goals of your application and its users. It's important to consider both the potential benefits and drawbacks and determine which option is the best fit for your application.</p>
                    </div>
                    <div class="col-sm-1 col-lg-3"></div>
                </div>
                
            </div>
        </div>
    </div>
    <footer class="bg-dark"></footer>
    <script>
        $(function(){
            const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
            const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));
            $(document)
            .on('click','body',function(e){
                if(!$(e.target).hasClass('mainnav')){
                    var exp = ($('#mainnavbar-toggler').attr('aria-expanded'));
                    if(exp == 'true' || $('#navbarContent').hasClass('show')){
                        $('#navbarContent').removeClass('show')
                        $('#mainnavbar-toggler').attr('aria-expanded',false)
                    }
                }
            })
            .on('click','.sidenav a',function(e){
                if($(e.target).hasClass('active')){
                    return;
                }else{
                    $('.sidenav a').removeClass('active');
                    $(e.target).addClass('active');
                }
            })
        })
    </script>
</body>
</html>