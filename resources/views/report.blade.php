<x-app-report-layout>
    <main>
        <section class="content-container_report mt-12 ">
            {{-- <div class="report-table">
                <table class="bg-white">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Date</th>
                            <th>Category</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>2023-01-01</td>
                            <td>Financial</td>
                            <td>Monthly Revenue Report</td>
                            <td>
                                <button class="element btn-custom">Edit</button>
                                <button class="element btn-custom">Delete</button>
                            </td>
                        </tr>
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div> --}}
            <div class="d-flex justify-content-evenly">
                <button class="btn btn-primary btn-lg btn-block bg-gray-800 hover:bg-gray-600 border-transparent" id="bar-graph">Bar Graph</button>
                <button class="btn btn-primary btn-lg btn-block bg-gray-800 hover:bg-gray-600 border-transparent" id="pie-chart">Pie Chart</button>
                <button class="btn btn-primary btn-lg btn-block bg-gray-800 hover:bg-gray-600 border-transparent" id="line-graph">Line Graph</button>
            </div>
            <div class="report-chart mt-8">
                <canvas id="myChart"></canvas>
            </div>
            <div class="report-chart mt-8" >
                <canvas id="pieChart" style="display: none;"></canvas>
            </div>
            <div class="report-chart mt-8">
                <canvas id="lineGraph" style="display: none"></canvas>
            </div>
        </section>
    </main>
</x-app-report-layout>
