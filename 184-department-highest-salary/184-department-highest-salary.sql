# Write your MySQL query statement below
SELECT Department.name AS Department, Employee.name AS Employee, Employee.salary AS Salary
FROM Employee LEFT JOIN Department ON Employee.departmentId = Department.id
WHERE Employee.id IN (
    SELECT id
    FROM Employee, (SELECT departmentId, max(salary) AS salary FROM Employee GROUP BY departmentId) AS E_tmp
    WHERE Employee.salary = E_tmp.salary AND Employee.departmentId = E_tmp.departmentId
)