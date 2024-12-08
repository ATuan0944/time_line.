<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>
<main class="container text-center">
    <div class="success-container animate__animated animate__fadeInDown">
        <h4 class="success-heading">🎉 Gửi liên hệ thành công!</h4>
        <p class="success-message"><?= htmlspecialchars($success_message) ?></p>
        <a href="?mod=contact&act=form" class="success-btn">Quay lại</a>
    </div>
</main>

<style>
    .success-container {
        max-width: 600px;
        margin: 0 auto;
        padding: 30px;
        background: linear-gradient(145deg, #f0fff4, #d9f5e4);
        border-radius: 15px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), inset 0 2px 4px rgba(255, 255, 255, 0.6);
        animation-duration: 0.8s;
    }

    .success-heading {
        font-size: 24px;
        font-weight: bold;
        color: #28a745;
        margin-bottom: 15px;
    }

    .success-message {
        font-size: 18px;
        color: #555;
        margin-bottom: 20px;
    }

    .success-btn {
        display: inline-block;
        padding: 10px 20px;
        font-size: 16px;
        font-weight: bold;
        color: #fff;
        background: linear-gradient(45deg, #4CAF50, #3E8E41);
        border: none;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .success-btn:hover {
        background: linear-gradient(45deg, #3E8E41, #4CAF50);
        box-shadow: 0 6px 10px rgba(0, 0, 0, 0.3);
        transform: translateY(-2px);
    }

    .success-btn:active {
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        transform: translateY(2px);
    }
</style>


