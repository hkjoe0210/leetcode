# Write your MySQL query statement below
SELECT max(E1.salary) AS SecondHighestSalary
FROM Employee AS E1, Employee AS E2
WHERE E1.salary < E2.salary