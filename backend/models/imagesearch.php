<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\image;

/**
 * imagesearch represents the model behind the search form about `app\models\image`.
 */
class imagesearch extends image
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['image_id', 'ref_id', 'sorting'], 'integer'],
            [['image_name', 'path', 'status', 'create_date', 'modified_date'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = image::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'image_id' => $this->image_id,
            'ref_id' => $this->ref_id,
            'sorting' => $this->sorting,
            'create_date' => $this->create_date,
            'modified_date' => $this->modified_date,
        ]);

        $query->andFilterWhere(['like', 'image_name', $this->image_name])
            ->andFilterWhere(['like', 'path', $this->path])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}