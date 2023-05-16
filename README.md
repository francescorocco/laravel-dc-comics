Milestone 1
Tramite gli appositi comandi artisan create un model con relativa migration e un resource controller.
Milestone 2
Iniziate a definire le prime operazioni CRUD con le relative view:
- index()
- show()
- create()
- store()
Bonus: creare il seeder per la tabella comics utilizzando il file in allegato.


        Schema::create('nome_al_plurale', function (Blueprint $table) {
            $table->id();
            $table->string('title',50);
            $table->text('description');
            $table->string('thumb');
            $table->string('price',8);
            $table->string('series',50);
            $table->date('sale_date');
            $table->string('type',20);
            $table->timestamps();