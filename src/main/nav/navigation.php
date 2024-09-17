
<style>
        *{
            margin: 1;
            padding: 3;
        }
        /* Style the navigation bar */
        .navbar {
            background-color: #0052D4;
            overflow: hidden;
            position: fixed;
            top: 0;
            width: 100%;
        }

        /* Style the navigation links */
        .navbar a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 18px 20px;
            text-decoration: none;
            font-size: 17px;
            font-family: Arial, Helvetica, sans-serif;
        }

        /* Hover effect for the links */
        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        /* Style the search bar */
        .navbar input[type="text"] {
            float: right;
            padding: 6px;
            margin: 8px 2;
            margin-right: 5px;
            font-size: 17px;
            border: none;
        }

        /* Style the search button */
        .navbar button {
            float: right;
            padding: 6px 10px;
            margin: 8px 10;
            margin-right: 2%;
            background-color: #ddd;
            border: none;
            cursor: pointer;
            font-size: 17px;
        }

        .navbar button:hover {
            background-color: #ccc;
        }

        /* Clear floats */
        .navbar::after {
            content: "";
            clear: both;
            display: table;
        }

        /* Page content */
        .content {
            padding: 16px;
            margin-top: 60px; /* Add top margin to avoid content being hidden under the navbar */
        }
    </style>
   <!-- Navigation bar -->
   <div class="navbar">
        <a href="../home/homeview.php">Home</a>
        <a href="../owner/ownercontroller.php">Owner Information</a>
        
        <!-- Search form -->
        <button type="submit">Search</button>
        <input type="text" placeholder="Search..">

    </div>
