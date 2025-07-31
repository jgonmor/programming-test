    <div class="p-20">
        @if ($invitation->status == 'confirmed')
            <div class="text-center">
                <h4 class="text-muted p-20">Account activated successfully!</h4>
                <a class="btn btn-success btn-block" href="{{ route('login') }}">Login</a>
            </div>
        @else
            <div class="text-center p-20">
                <h4 class="text-muted">Activate your account</h4>
            </div>
            <form wire:submit.prevent="submit">
                <div class="form-group">
                    <input type="text" wire:model="name" placeholder="Name" class="form-control">
                    @error('name')
                        <span>{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <input type="password" wire:model="password" placeholder="Password" class="form-control">
                    @error('password')
                        <span>{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <input type="password" wire:model="password_confirmation" placeholder="Confirm Password"
                        class="form-control">
                </div>

                <div class="form-group text-center">
                    <button type="submit" class="btn btn-success btn-block">Activate Account</button>
                </div>
            </form>
        @endif
    </div>
