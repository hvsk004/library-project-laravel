<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Base styles */
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            line-height: 1.5;
            color: #374151;
            margin: 0;
            padding: 0;
        }
        .wrapper {
            background-color: #f3f4f6;
            padding: 32px 16px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1);
        }
        .header {
            background-color: #4f46e5;
            padding: 24px;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }
        .header h1 {
            color: #ffffff;
            margin: 0;
            font-size: 24px;
            font-weight: 600;
        }
        .content {
            padding: 24px;
        }
        .footer {
            background-color: #f9fafb;
            padding: 16px 24px;
            border-bottom-left-radius: 8px;
            border-bottom-right-radius: 8px;
            font-size: 14px;
            color: #6b7280;
            text-align: center;
        }
        .button {
            display: inline-block;
            background-color: #4f46e5;
            color: #ffffff;
            padding: 12px 24px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 500;
            margin-top: 16px;
        }
        .button:hover {
            background-color: #4338ca;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <div class="header">
                <h1>{{ config('app.name') }}</h1>
            </div>
            
            <div class="content">
                @yield('content')
            </div>

            <div class="footer">
                <p>© {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</p>
                <p>If you no longer wish to receive these emails, you can <a href="{{ route('notifications.settings') }}">update your notification settings</a>.</p>
            </div>
        </div>
    </div>
</body>
</html>