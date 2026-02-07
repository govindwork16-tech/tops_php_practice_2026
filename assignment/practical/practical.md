# SQL Examples

This document contains practical SQL query examples for the `system_users` table.

## Select

```sql
SELECT * FROM system_users;
```

## Insert

```sql
INSERT INTO system_users (full_name, email, role, salary, phone)
VALUES ('Demo User', 'demo.user@gmail.com', 'editor', 50000, 9876543210);
```

## Update

```sql
UPDATE system_users
SET salary = 60000
WHERE user_id = 1;
```

## Delete

```sql
DELETE FROM system_users
WHERE user_id = 2;
```

## Where

```sql
SELECT * FROM system_users
WHERE role = 'admin';
```

## Like

```sql
SELECT * FROM system_users
WHERE full_name LIKE 'A%';
```

## Group By

```sql
SELECT role, COUNT(user_id) AS total_users
FROM system_users
GROUP BY role;
```

## Limit

```sql
SELECT * FROM system_users
LIMIT 5;
```

## Subquery

```sql
SELECT *
FROM system_users
WHERE salary > (SELECT AVG(salary) FROM system_users);
```

## And

```sql
SELECT *
FROM system_users
WHERE role = 'editor' AND salary > 50000;
```

## In

```sql
SELECT *
FROM system_users
WHERE role IN ('admin', 'editor');
```

