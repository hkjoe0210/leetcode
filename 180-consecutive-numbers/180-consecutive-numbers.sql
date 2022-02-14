# Write your MySQL query statement below
SELECT L1.num AS ConsecutiveNums
FROM Logs AS L1, Logs AS L2, Logs AS L3
WHERE L1.num = L2.num AND L2.num = L3.num AND (L2.id - 1) = L1.id AND (L3.id - 1) = L2.id
GROUP BY L1.num