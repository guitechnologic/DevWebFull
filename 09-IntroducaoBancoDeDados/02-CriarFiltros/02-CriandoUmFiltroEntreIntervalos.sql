SELECT DISTINCT
    tempoentrega, precounitario, tempoentrega
FROM 
    produtos
WHERE
    precounitario <= 12
ORDER BY precounitario


--------------------------------------------------------------
SELECT DISTINCT
    tempoentrega, precounitario, tempoentrega
FROM 
    produtos
WHERE
    precounitario BETWEEN 5 and 12
ORDER BY precounitario


--------------------------------------------------------------