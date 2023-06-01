<?php

class VolcanoController extends BaseController
{
    private $volcanoModel;

    public function __construct()
    {
        $this->volcanoModel = $this->model('VolcanoModel');
    }

    public function index()
    {
        $volcanoes = $this->volcanoModel->getTopVolcanoes();

        $rows = '';
        foreach ($volcanoes as $result) {
            $rows .= "<tr>
                        <td>$result->id</td>
                        <td>$result->Naam</td>
                        <td>$result->Hoogte</td>
                        <td>$result->Land</td>
                        <td>$result->JaarLaatsteUitbarsting</td>
                        <td>$result->AantalSlachtoffers</td>
                      </tr>";
        }

        $data = [
            'title' => 'Top 5 actiefste vulkanen ter wereld',
            'rows'  => $rows
        ];

        $this->view('volcano/index', $data);
    }
}