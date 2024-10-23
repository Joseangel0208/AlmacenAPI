<!DOCTYPE html>
<html>
<head>
    <title>Reporte de la cantidad Total</title>
</head>
<body>
    <h1>Reporte de la cantidad Total y Valor del Inventario</h1>
    <p>Cantidad Total: {{ $stockTotal }}</p>
    <p>Valores Totales del Inventario: ${{ number_format($valorTotalInventario, 2) }}</p>
</body>
</html>
