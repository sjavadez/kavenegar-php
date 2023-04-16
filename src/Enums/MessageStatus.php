<?php

namespace Sjavadez\Kavenegar\Enums;

class MessageStatus
{
    const QUEUED = 1;
    const SCHEDULED = 2;
    const SEND_TO_TELECOMMUNICATION_4 = 4;
    const SEND_TO_TELECOMMUNICATION_5 = 5;
    const FAILED = 6;
    const DELIVERED = 10;
    const UNDELIVERED = 11;
    const CANCELED_BY_USER = 13;
    const BLOCKED_BY_USER = 14;
    const INVALID_PHONE_NUMBER = 100;

    const ALL = [
        self::QUEUED,
        self::SCHEDULED,
        self::SEND_TO_TELECOMMUNICATION_4,
        self::SEND_TO_TELECOMMUNICATION_5,
        self::FAILED,
        self::DELIVERED,
        self::UNDELIVERED,
        self::CANCELED_BY_USER,
        self::BLOCKED_BY_USER,
        self::INVALID_PHONE_NUMBER,
    ];

    const MESSAGES = [
        self::QUEUED => 'در صف ارسال قرار دارد',
        self::SCHEDULED => 'زمان بندی شده (ارسال در تاریخ معین)',
        self::SEND_TO_TELECOMMUNICATION_4 => 'ارسال شده به مخابرات',
        self::SEND_TO_TELECOMMUNICATION_5 => 'ارسال شده به مخابرات (همانند وضعیت 4)',
        self::FAILED => 'خطا در ارسال پیام که توسط سر شماره پیش می آید و به معنی عدم رسیدن پیامک می‌باشد',
        self::DELIVERED => 'رسیده به گیرنده',
        self::UNDELIVERED => 'نرسیده به گیرنده ، این وضعیت به دلایلی از جمله خاموش یا خارج از دسترس بودن گیرنده اتفاق می افتد',
        self::CANCELED_BY_USER => 'ارسال پیام از سمت کاربر لغو شده یا در ارسال آن مشکلی پیش آمده که هزینه آن به حساب برگشت داده می‌شود',
        self::BLOCKED_BY_USER => 'بلاک شده است، عدم تمایل گیرنده به دریافت پیامک از خطوط تبلیغاتی که هزینه آن به حساب برگشت داده می‌شود',
        self::INVALID_PHONE_NUMBER => 'شناسه پیامک نامعتبر است ( به این معنی که شناسه پیام در پایگاه داده کاوه نگار ثبت نشده است یا متعلق به شما نمی‌باشد)',
    ];
}