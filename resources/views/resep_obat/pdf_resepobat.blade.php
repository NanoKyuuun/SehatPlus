<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Export</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="p-6">
    <h1 class="text-2xl mb-4 font-semibold text-gray-700 text-center">Resep Obat </h1>
    <table class="min-w-full border-collapse border border-gray-300">
        <tbody>
            <tr>
                <td class="border border-gray-300 px-4 py-2 font-semibold">Nama</td>
                <td class="border border-gray-300 px-4 py-2">{{ auth()->user()->name }}</td>
            </tr>
            <tr>
                <td class="border border-gray-300 px-4 py-2 font-semibold">Diagnosis</td>
                <td class="border border-gray-300 px-4 py-2">{{ $data_obat->resep_obats[0]->diagnisis }}</td>
            </tr>
            <tr>
                <td class="border border-gray-300 px-4 py-2 font-semibold">Obat</td>
                <td class="border border-gray-300 px-4 py-2">{{ $data_obat->resep_obats[0]->obat }}</td>
            </tr>
            <tr>
                <td class="border border-gray-300 px-4 py-2 font-semibold">Dosis</td>
                <td class="border border-gray-300 px-4 py-2">{{ $data_obat->resep_obats[0]->dosis }}</td>
            </tr>
            <tr>
                <td class="border border-gray-300 px-4 py-2 font-semibold">Aturan Minum</td>
                <td class="border border-gray-300 px-4 py-2">{{ $data_obat->resep_obats[0]->aturan_minum }}</td>
            </tr>
        </tbody>
    </table>
    <script>
        window.print();
    </script>
</body>

</html>
