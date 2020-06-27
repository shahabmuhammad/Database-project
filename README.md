# Name: Muhammad Shahab
## Student of Ghulam Ishaq Khan Institute of Engineering Sciences and Technology

# Problem Statement:
GIKI has opted to adopt Outcome Based Education (OBE) system for all engineering programs. There are multiple departments (FCSE, FME, etc.) and every department has one or more programs. Every program has its own set of Program Learning Outcomes (PLOs). Every student must achieve all PLOs assigned to his/her program. A PLO can be assessed from multiple courses (via CLOs). Every course has one or more CLOs that are mapped to PLOs. Since, a PLO is mapped to multiple courses and a student may pass it in one course but fail in other courses so a threshold value is used. For example, if threshold value is 60%, it means a student is considered to pass a PLO if he passed it (via CLO of courses) in more than 60% of courses where it was mapped. Similarly, a course has multiple assessment activities (Quiz, Assignments, Midterm, Final, etc.). A CLO can be mapped to multiple activities. For example, CLO 1 of CE431 is mapped 30% on Assignments, 30% on Midterm, 20% on Quiz and 20% on final exam and threshold value (passing value) for CLO passing is set at 50%. A student shall be considered passed in CLO 1 of CE431 if he gets more than 50% aggregate score in the CLO 1.
 Implement OBE system for GIKI in any programming language (or framework) using any database management system. Your program must be user friendly and password protected with following views: 
### •	Department (Dean) view: 
a. Manage courses offered by department
b. Department must be able to set degree plan for a program (courses offered semester wise and set pre-requisites) 
c. Department must be able to manage PLOs and their mapping on the courses 
### •	Controller examination view 
a. Manage offered semester 
b. Controller examination must be able to offer courses in a semester 
c. Controller examination must be able to view PLO transcript of students 
### •	Instructor view
a. Instructor must be able to manage course assessments (Quiz, Assignments, Mid, Final, etc.) 
b. Instructor must be able to manage CLOs and their mapping on assessment criteria (Please note that instructor cannot change PLO as PLO is managed by department) 
 Manage means CREATE, READ, UPDATE, DELETE

#### This project is programmed in Core PHP.
#### Find Conceptual Diagram and Logical Diagram in above issue section 





# Assumptions:
 •	Since, there is no student view in our database project. So we have assumed that the student has enrolled the course offered by department.
 •	When the instructor enter the marks of the students obtained in the course. We have assumed that the exam has taken place and instructor will enter the marks of the student in each activity.
 •	There is no option for adding a new instructor in the department view. We will enter it in the database manually. 
 •	An instructor will work for only one department and one department will have many instructor.
 •	A program will be associated with only one department.
 •	A department can have many programs.
 •	We have also assumed student is enrolled in a program. A program will have many students and each student can be enrolled in only one program.





 

