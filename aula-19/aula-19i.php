<?php

class CampeonatoBrasileiro extends SplHeap {
    protected function compare($value1, $value2): int {
        if ($value1['pontuacao'] == $value2["pontuacao"]) {
            return $value1['vitorias'] <=> $value2['vitorias'];
        }
        return $value1['pontuacao'] <=> $value2['pontuacao'];
    }
}

$heap = new CampeonatoBrasileiro();

$heap->insert(['nome' => 'Remo', 'pontuacao' => 22, 'vitorias' => 6]);
$heap->insert(['nome' => 'Santa Cruz', 'pontuacao' => 28, 'vitorias' => 7]);
$heap->insert(['nome' => 'Atlético AC', 'pontuacao' => 30, 'vitorias' => 9]);
$heap->insert(['nome' => 'Botafogo PB', 'pontuacao' => 26, 'vitorias' => 6]);
$heap->insert(['nome' => 'Náutico', 'pontuacao' => 31, 'vitorias' => 9]);
$heap->insert(['nome' => 'Confiança', 'pontuacao' => 23, 'vitorias' => 5]);
$heap->insert(['nome' => 'Globo', 'pontuacao' => 22, 'vitorias' => 4]);

//Campeão:
echo "Campeão da Série C 2018: {$heap->top()['nome']} <br/><br/>";

//Resultados
$total = $heap->count();

foreach ($heap as $key => $time) {
    echo ($total - $key) . " º {$time['nome']} <br/>";
}