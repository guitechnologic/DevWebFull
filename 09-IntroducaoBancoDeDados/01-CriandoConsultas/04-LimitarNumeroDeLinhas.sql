SELECT 
    nomeproduto, precounitario, tempoentrefa 
FROM 
    produtos
ORDER BY
    nomeproduto ASC, tempoentrega DESC
LIMIT
    10

--------------------------------------------------------------