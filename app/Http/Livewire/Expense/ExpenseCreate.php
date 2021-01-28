<?php

namespace App\Http\Livewire\Expense;

use App\Models\Expense;
use Livewire\Component;
use Livewire\WithFileUploads;

class ExpenseCreate extends Component
{
    use WithFileUploads;

    public $amount;
    public $description;
    public $type;
    public $photo;
    public $expenseDate;

    protected $rules = [
        'amount' => 'required',
        'type' => 'required',
        'description' => 'required',
        'photo' => 'image|nullable',
    ];

    public function render()
    {
        return view('livewire.expense.expense-create');

        //Caso escolher o layout
        //return view('livewire.expense.expense-create')->layout('layouts.app');
    }

    public function createExpense()
    {
        $this->validate();

        if ($this->photo) {
            $this->photo = $this->photo->store('expenses-photos', 'public');
        }

        auth()->user()->expenses()->create([
            'amount' => $this->amount,
            'type' => $this->type,
            'description' => $this->description,
            'user_id' => 1,
            'photo' => $this->photo ?? null,
            'expense_date' => $this->expenseDate,
        ]);

        session()->flash('message', 'Registro criado com sucesso!');

        $this->amount = $this->type = $this->description = $this->photo = null;
    }
}