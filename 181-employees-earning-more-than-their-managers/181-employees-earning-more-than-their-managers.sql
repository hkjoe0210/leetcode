# Write your MySQL query statement below
SELECT E1.name as Employee
FROM Employee as E1, Employee as E2
WHERE E2.salary < E1.salary AND E1.managerId = E2.id