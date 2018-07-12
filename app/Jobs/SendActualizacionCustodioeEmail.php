<?php

namespace App\Jobs;

use App\Custodios;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendActualizacionCustodioeEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * The number of times the job may be attempted.
     *
     * @var int
     */
    public $tries = 5;

    /**
     * Determine the time at which the job should timeout.
     *
     * @return \DateTime
     */
    public function retryUntil()
    {
        return now()->addSeconds(5);
    }

    public $custodios;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Custodios $custodios)
    {
        $this->custodios = $custodios;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        return $this->markdown('emails.actualizado_custodio_equipos')->subject(Lang::get('message.verifica_correo'));
    }
}
