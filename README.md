# task-crud-practice

## 概要
COACHTECH 教材 Tutorial 11-2「タスク管理APIのCRUD実装」で作成した成果物です。
- タスク管理APIのCRUD操作

## 使用技術

- PHP 8.x
- Laravel 10.x
- REST API（CRUD）
- API Resources、FormRequest（バリデーション）
- HTTPステータスコード

## 学んだこと

- API Resourcesによるレスポンス整形
- 適切なステータスコード、エラーコードのカスタマイズ
- API CRUD実装

## 動作確認

- GET /api/tasksでタスク一覧が取得できる（200）
- POST /api/tasksでタスクを作成できる（201）
- GET /api/tasks/{id}でタスク詳細が取得できる（200）
- PUT /api/tasks/{id}でタスクを更新できる（200）
- DELETE /api/tasks/{id}でタスクを削除できる（204）
- バリデーションエラー時に422が返る
- 存在しないタスクにアクセスすると404が返る
- 動作確認: Postmanで各エンドポイントにリクエストを送信
