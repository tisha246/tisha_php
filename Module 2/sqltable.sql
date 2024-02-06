TABLE:-   employee
 
TABLE :-  Incentives 
 
a) Get First_Name from employee table using alias name “Employee Name”. 
=>  SELECT `First_Name`as 'Employee_Name' FROM `employee`;
b) Get FIRST_NAME, Joining year, Joining Month and Joining Date from employee table.
=>Select First_Name, year(Joining_Date) JoinYear , month(Joining_Date), day(Joining_Date) from employee;
c) Get all employee details from the employee table order by First Name Ascending And Salary descending? 
=> SELECT * FROM ‘employee’ ORDER BY ‘First_Name’ ASC, ‘Salary’ DESC;
d) Get employee details from employee table whose first name contains „o‟.
=> SELECT * FROM employee WHERE First_Name LIKE 'O';
 e) Get employee details from employee table whose joining month is “January”.
=>SELECT * FROM employee WHERE Joining_Date LIKE 'January';
 f) Get department, total salary with respect to a department from employee table Order By total salary descending.
=> SELECT Department, SUM(Salary) AS TotalSalary FROM employee GROUP BY Department ORDER BY Salary DESC;
 g) Get department wise maximum salary from employee table order by salary ascending? 
=>SELECT Department, MAX(Salary) AS MaxSalary FROM Employee GROUP BY Department ORDER BY MaxSalary ASC;
h) Select first_name, incentive amount from employee and incentives table for those Employees who have incentives and incentive amount greater than 3000
=>SELECT First_Name,Incentive_Amt FROM employee emp INNER JOIN Incentives INC ON emp.Employee_Id = Inc.Employee_Ref_Id AND Incentive_Amt> 3000;
 i) Select 2nd Highest salary from employee table.
=>Select Max(Salary) as Salary from employee where Salary <(select MAX(Salary) from employee);
 j) Select first_name, incentive amount from employee and incentives table for all Employees who got incentives using left join. 
=>SELECT First_Name,NVL(Incentive_Amt,0) FROM employee A RIGHT JOIN Incentives B ON A.Employee_Id=B.Employee_Ref_Id;
k) Create View OF Employee table in which store first name, last name and salary only.
=>CREATE VIEW Employee_View AS SELECT Employee_Id, First_Name, Last_Name , Salary FROM Employee;
 l) Create Procedure to find out department wise highest salary.
=> CREATE PROCEDURE Find_Department_Highest_Salary()
BEGIN
    DECLARE done INT DEFAULT FALSE;
    DECLARE Department_id INT;
    DECLARE Max_Salary DECIMAL(10, 2);
 m) Create after Insert trigger on Employee table which insert records in view table.
=> CREATE TRIGGER AfterEmployeeInsert
AFTER INSERT ON Employee
FOR EACH ROW
BEGIN
    -- Inserting into the EmployeeView table
    INSERT INTO EmployeeView (Employee_ID, First_Name, Last_Name, Department)
    VALUES (NEW.EmployeeID, NEW.FirstName, NEW.LastName, NEW.Department);
END;


















SQL Task – 2
TABLE :-  SALES PERSON
 
TABLE :- CUSTOMER
 
TABLE :- ORDER
 
a) All orders for more than $1000. 
=> SELECT * FROM `order` WHERE O_Amt>1000;
b) Names and cities of all salespeople in London with commission above 0.10. 
=>SELECT S_Name , City FROM `sales_person` WHERE Comm > 0.10 AND City ='LONDON';
c) All salespeople either in Barcelona or in London. 
=>SELECT S_Name , City FROM `sales_person` WHERE City IN ('BARCELONA','LONDON');
d) All salespeople with commission between 0.10 and 0.12. (Boundary values should be excluded). 
=>SELECT S_Name , Comm FROM `sales_person` WHERE Comm > 0.10 AND Comm < 0.12;
e) All customers with NULL values in city column.
=> SELECT C_Name FROM `customer` WHERE City IS NULL;
 f) All orders taken on Oct 3Rd and Oct 4th 1994.
=> SELECT * FROM `order` WHERE O_Date IN ('03-10-1994','04-10-1994');
 g) All customers serviced by peel or Motika.
=> SELECT * FROM customer WHERE S_Num = 1001 OR S_Num = 1004;
 h) All customers whose names begin with a letter from A to B
=>SELECT C_Name FROM `customer` WHERE C_Name LIKE 'A%' OR C_Name LIKE 'B%';
 i) All customers excluding those with rating <= 100 unless they are located in Rome. 
=> SELECT C_Name FROM `customer` WHERE Rating <= 100 OR City = 'ROME';
j) All orders except those with 0 or NULL value in amt field. 
=> SELECT O_Num FROM `order` WHERE O_Amt != 0 OR O_Amt IS NOT NULL;
k) Count the number of salespeople currently listing orders in the order table.
=> SELECT COUNT(DISTINCT S_Num) AS num_active_sales_person
FROM `order`
WHERE order_status = 'Active';
