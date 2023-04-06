<form wire:submit.prevent="register">
    <div>
        <label for="name">Name</label>
        <input wire:model="name" type="text" id="name" name="name"/>
    </div>
    <div>
        <label for="email">Email</label>
        <input wire:model="email" type="text" id="email" name="email"/>
    </div>
    <div>
        <label for="password">Password</label>
        <input wire:model="password" type="password" id="password" name="password"/>
    </div>
    <div>
        <label for="passwordConfirm">Confirm Password</label>
        <input wire:model="passwordConfirm" type="password" id="passwordConfirm" name="passwordConfirm"/>
    </div>
    <div>
        <input type="submit" value="Register"/>
    </div>
</form>
