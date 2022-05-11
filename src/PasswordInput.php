<?php

namespace Papalardo\FilamentPasswordInput;

use Filament\Forms\Components\TextInput;
use Closure;

class PasswordInput extends TextInput
{
    protected string $view = 'filament-password-input::password-input';

    protected function setUp(): void
    {
        $this->newPassword();
    }

    public function currentPassword(bool | Closure $condition = true): static
    {
        $this->rule('current_password', $condition);

        if ($this->evaluate($condition)) {
            $this->autocomplete('current_password');
        }

        return $this;
    }

    public function newPassword(): static
    {
        $this->autocomplete('new-password');

        return $this;
    }
}
