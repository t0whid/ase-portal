<!DOCTYPE html>
<html>
<head>
    <title>Webgility Export Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        * { box-sizing: border-box; }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: Inter, Arial, sans-serif;
            background:
                radial-gradient(circle at top left, rgba(100, 1, 0, 0.12), transparent 32%),
                linear-gradient(135deg, #f8fafc 0%, #f3f4f6 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #111827;
            padding: 20px;
        }

        .card {
            width: 100%;
            max-width: 420px;
            background: #ffffff;
            border-radius: 20px;
            padding: 34px;
            box-shadow: 0 24px 70px rgba(15, 23, 42, 0.12);
            border: 1px solid #eef2f7;
        }

        .badge {
            display: inline-flex;
            padding: 7px 12px;
            border-radius: 999px;
            background: #fff1f1;
            color: #640100;
            font-size: 13px;
            font-weight: 700;
            margin-bottom: 18px;
        }

        h1 {
            margin: 0;
            font-size: 28px;
            letter-spacing: -0.04em;
        }

        p {
            margin: 10px 0 24px;
            color: #6b7280;
            line-height: 1.6;
            font-size: 15px;
        }

        label {
            display: block;
            font-weight: 700;
            margin-bottom: 8px;
            font-size: 14px;
        }

        input {
            width: 100%;
            padding: 14px 15px;
            border-radius: 12px;
            border: 1px solid #d1d5db;
            font-size: 15px;
            outline: none;
        }

        input:focus {
            border-color: #640100;
            box-shadow: 0 0 0 4px rgba(100, 1, 0, 0.08);
        }

        button {
            width: 100%;
            margin-top: 16px;
            padding: 14px 16px;
            border: 0;
            border-radius: 12px;
            background: #640100;
            color: white;
            font-weight: 800;
            font-size: 15px;
            cursor: pointer;
        }

        .error {
            margin-top: 10px;
            color: #dc2626;
            font-size: 14px;
        }

        .footer {
            margin-top: 18px;
            font-size: 13px;
            color: #9ca3af;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="card">
        <div class="badge">Internal Tool</div>

        <h1>Webgility CSV Export</h1>

        <p>
            Enter the export password to search orders and download per-order CSV files for Webgility import.
        </p>

        <form method="POST" action="{{ route('webgility.export.login') }}">
            @csrf

            <label>Export Password</label>
            <input type="password" name="password" required autofocus placeholder="Enter password">

            @error('password')
                <div class="error">{{ $message }}</div>
            @enderror

            <button type="submit">Open Export Tool</button>
        </form>

        <div class="footer">
            ASE Portal · Webgility / QuickBooks Export
        </div>
    </div>
</body>
</html>