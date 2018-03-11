Change log
All notable changes to this project will be documented in this file.

The format is based on Keep a Changelog and this project adheres to Semantic Versioning.

Group Members: [CAPTAIN] Calvin Lai [MATE #1] Jeremy Lee [MATE #2] Michaela Yoon

## *Version 0.1.8*

Release Date: March 11, 2018

## 0.1.8 - 2018-03-11

### Modified by Jeremy
-- TaskListTest: added setUp, testMoreUncompletedThanCompleted

## 0.1.7 - 2018-03-11

### Added by Michaela
--

### Modified by Michaela
--

## 0.1.6 - 2018-03-10

### Added by Calvin
--

### Modified by Calvin
--

## 0.1.5 - 2018-03-04

### Modified by Michaela
-- application/controllers/Mtce.php fixed showit function to include size, group, and status
-- views/itemedit.php included fields for size, group, and status

## 0.1.4 - 2018-03-03

### Added by Michaela
-- views/itemedit.php

### Modified by Michaela
-- models/App.php to fix bug. Properties are set so "undefined index" PHP error is not triggered.
-- models/Tasks.php added rules to validate tasks.
-- application/controllers/Mtce.php added functions for add, edit, showit, submit, alert, cancel, delete
-- views/itemedit.php buttons for canceling and deleting

## 0.1.3 - 2018-03-01

### Added by Jeremy
-- application/views/itemadd.php
-- application/views/oneitemx.php

### Modified by Jeremy
-- application/controllers/Mtce.php: page(...), show_page(...)

## 0.1.2 - 2018-03-01

### Modified by Calvin
-- by_priority.php modified to be a form with checkboxes and submit button 
-- by_category.php modified to be a form with checkboxes and submit button
-- Views.php added complete status and handler for completed tasks, user role validation added

## 0.1.1 - 2018-03-01

### Added by Jeremy
-- controllers/Roles.php, actor(...)

### Modified by Jeremy
-- application/config/constants.php: user roles
-- views/_menubar.php: dropdown for the user roles
-- application/config/config.php: $config['sess_save_path'] = '/tmp';
-- gitignore: /tmp/*
-- application/config/autoload.php: session added to libraries
-- application/controllers/Mtce.php: added role to title in show_page(...)

## 0.1.0 - 2018-03-01

## Added by Calvin
-- views/itemnav.php adds a nav bar to the maintainence page

### Modified by Calvin
-- views/itemlist.php added pagination to navbar
-- Mtch.php added functions to display page by page as well as function to the navbar in itemnav.php

## 0.0.5 - 2018-02-17

### Added by Michaela
-- controllers/Helpme.php
-- libraries/Parsedown.php
-- data/jobs.md

### Modified by Michaela
-- autoload.php to include parsedown in libraries
-- config.php modified to link to Helpme

## 0.0.4 - 2018-02-15

### Added by Jeremy
-- controllers/Mtce.php
-- views/itemlist.php
-- views/oneitem.php

## 0.0.3 - 2018-02-15

### Modified by Calvin
-- Views.php modified to display two separate lists organized by priority and category
-- Tasks.php modified to add sorting and displaying functions

## 0.0.2 - 2018-02-15

### Modified by Jeremy
-- MY_Controller: render, team name added to page title
-- views/homepage.php: alert div
-- controllers/Welcome.php: table and details display

## 0.0.1 - 2018-02-15

### Added By Calvin
-- added a change log, added Tasks.php

### Modified by Calvin
-- added code to autoload models "app" and "tasks" in autoload.php
