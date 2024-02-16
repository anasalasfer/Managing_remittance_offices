<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h2 class="mb-0">تعديل بيانات المكتب</h2>
            </div>
            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <form method="post" action="{{ route('admin.update', $office->id) }}">
                    @csrf
                    @method('put')

                    <div class="mb-3">
                        <label for="name" class="form-label">الاسم:</label>
                        <input type="text" name="name" value="{{ $office->name }}" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">البريد الإلكتروني:</label>
                        <input type="email" name="email" value="{{ $office->email }}" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">كلمة المرور:</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="address" class="form-label">العنوان:</label>
                        <input type="text" name="address" value="{{ $office->address }}" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="balance" class="form-label">الرصيد:</label>
                        <input type="number" name="balance" value="{{ $office->balance }}" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">تحديث البيانات</button>
                </form>
            </div>
        </div>
    </div>



